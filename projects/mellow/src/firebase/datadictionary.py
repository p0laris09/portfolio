import firebase_admin
from firebase_admin import credentials
from google.cloud import firestore
import json

# ✅ Load Firebase Service Account Key
SERVICE_ACCOUNT_PATH = "auth-mellow-firebase-adminsdk-df6xp-397b101c23.json"  # Update with your path

# ✅ Initialize Firebase Admin SDK (Only if not already initialized)
if not firebase_admin._apps:
    cred = credentials.Certificate(SERVICE_ACCOUNT_PATH)
    firebase_admin.initialize_app(cred)

# ✅ Initialize Firestore Client
db = firestore.Client()

def get_firestore_data_structure():
    """
    Retrieves all Firestore collections and their document field names.
    """
    data_structure = {}

    # ✅ Get all collections
    collections = db.collections()
    for collection in collections:
        collection_name = collection.id
        data_structure[collection_name] = set()  # Use a set to avoid duplicates

        # ✅ Get document fields for each collection
        docs = collection.stream()
        for doc in docs:
            doc_data = doc.to_dict()
            data_structure[collection_name].update(doc_data.keys())  # Store field names

        # Convert set to list for JSON compatibility
        data_structure[collection_name] = list(data_structure[collection_name])

    return data_structure

# ✅ Get Firestore Data Structure
firestore_structure = get_firestore_data_structure()

# ✅ Print the JSON output
print("\n📂 Firestore Collections and Fields:")
print(json.dumps(firestore_structure, indent=4))
