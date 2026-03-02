<?php
require '../../vendor/autoload.php';
require 'firestore_client.php';

use Google\Cloud\Firestore\FirestoreClient;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getDemographics() {
    try {
        $firestore = setup_client_create('auth-mellow');

        // ✅ Step 1: Fetch University of Makati Data
        $universityRef = $firestore->collection('universities');
        $querySnapshot = $universityRef->where('university', '=', 'University of Makati')->documents();

        if ($querySnapshot->isEmpty()) {
            return ['error' => 'No data found for University of Makati'];
        }

        $collegesData = [];
        $programsData = [];

        // ✅ College and Program Field Mapping
        $collegeFieldMapping = [
            'College of Business and Financial Sciences (CBFS)' => 'cbfs',
            'College of Innovative Teacher Education (CITE)' => 'cite',
            'College of Computing and Information Sciences (CCIS)' => 'ccis',
            'College of Construction Sciences and Engineering (CCSE)' => 'ccse',
            'College of Engineering Technology (CET)' => 'cet',
            'College of Governance and Public Policy (CGPP)' => 'cgpp',
            'College of Tourism and Hospitality Management (CTHM)' => 'cthm',
            'College of Human Kinetics (CHK)' => 'chk',
            'College of Liberal Arts and Sciences (CLAS)' => 'clas',
            'College of Continuing, Advanced and Professional Studies (CCAPS)' => 'ccaps',
            'Higher School ng UMak (CITE-HSU)' => 'hsu',
            'School of Law (SOL)' => 'sol',
            'Institute of Arts and Design (IAD)' => 'iad',
            'Institute of Accountancy (IOA)' => 'ioa',
            'Institute of Pharmacy (IOP)' => 'iop',
            'Institute of Nursing (ION)' => 'ion',
            'Institute of Imaging Health Sciences (IIHS)' => 'iihs',
            'Institute of Psychology (IOPsy)' => 'iopsy',
            'Institute for Social Development and Nation Building (ISDNB)' => 'isdnb',
            'Institute of Technical Education and Skills Training (ITEST)' => 'itest'
        ];

        foreach ($querySnapshot as $doc) {
            $data = $doc->data();

            // ✅ Load colleges
            $collegesData = $data['colleges'] ?? [];

            // ✅ Load programs (handle mixed types)
            foreach ($collegeFieldMapping as $collegeName => $field) {
                if (isset($data[$field])) {
                    if (is_string($data[$field])) {
                        $programsData[$collegeName] = [$data[$field]]; // Convert string to array
                    } elseif (is_array($data[$field])) {
                        $programsData[$collegeName] = $data[$field];
                    }
                } else {
                    // ✅ If no program data exists for a college, set to an empty array
                    $programsData[$collegeName] = [];
                }
            }

            // ✅ Step 2: Initialize Counter for Colleges and Programs
            $collegeCounts = [];
            $programCounts = [];

            foreach ($collegesData as $college) {
                $collegeCounts[$college] = 0;

                // ✅ Ensure that a college without programs still appears in the output
                if (isset($programsData[$college]) && is_array($programsData[$college])) {
                    $programCounts[$college] = [];
                    foreach ($programsData[$college] as $program) {
                        $programCounts[$college][$program] = 0;
                    }
                } else {
                    $programCounts[$college] = ['No programs available' => 0];
                }
            }

            // ✅ Step 3: Count Students Per College and Program
            $usersRef = $firestore->collection('users');
            $usersSnapshot = $usersRef->documents();

            foreach ($usersSnapshot as $doc) {
                $user = $doc->data();
                $userCollege = $user['college'] ?? '';
                $userProgram = $user['program'] ?? '';

                if (isset($collegeCounts[$userCollege])) {
                    $collegeCounts[$userCollege]++;
                    if (isset($programCounts[$userCollege][$userProgram])) {
                        $programCounts[$userCollege][$userProgram]++;
                    } else {
                        $programCounts[$userCollege]['No programs available']++;
                    }
                }
            }

            // ✅ Step 4: Format and Return Data
            $result = [];
            foreach ($collegeCounts as $college => $count) {
                $programData = [];
                foreach ($programCounts[$college] as $program => $programCount) {
                    $programData[] = [
                        'program' => $program,
                        'count' => $programCount
                    ];
                }

                $result[] = [
                    'college' => $college,
                    'count' => $count,
                    'programs' => $programData
                ];
            }

            return $result;
        }

    } catch (Exception $e) {
        http_response_code(500);
        return ['error' => $e->getMessage()];
    }
}

header('Content-Type: application/json');
$result = getDemographics();

echo json_encode($result, JSON_UNESCAPED_UNICODE);