<script setup lang="ts">
usePageSeo(
  'Contact - Anne Lorraine Ramos',
  'Have a project in mind, a question, or just want to say hello? I\'d love to hear from you!'
)

const EMAIL = 'annelorraineramos@gmail.com'

const infoCards = [
  { icon: 'pi-envelope', title: 'Email', text: 'annelorraineramos@gmail.com', action: 'Send Email', href: 'mailto:annelorraineramos@gmail.com' },
  { icon: 'pi-phone', title: 'Phone', text: '+63 (946) 647-0371', action: 'Call Now', href: 'tel:+639466470371' },
  { icon: 'pi-map-marker', title: 'Location', text: 'Metro Manila, Philippines', action: 'Open to Remote' }
]

const socials = [
  { icon: 'pi-github', title: 'GitHub', text: 'View my repositories', href: 'https://github.com/p0laris09' },
  { icon: 'pi-linkedin', title: 'LinkedIn', text: 'Connect professionally', href: 'https://www.linkedin.com/in/anne-lorraine-ramos-596b5b330/' }
]

const responses = [
  { icon: 'pi-history', title: 'Quick Response', text: 'I typically respond within 24-48 hours' },
  { icon: 'pi-calendar', title: 'Flexible Schedule', text: 'Available for meetings across different timezones' },
  { icon: 'pi-lightbulb', title: 'Creative Solutions', text: 'Ready to bring your innovative ideas to life' }
]

const faqs = [
  { q: 'What services do you offer?', a: 'I specialize in full-stack web development, mobile app development with Flutter, database design, and UI/UX implementation.' },
  { q: 'What\'s your typical project timeline?', a: 'Project timelines vary based on complexity. Small projects take 2-4 weeks, while larger applications may take 2-3 months.' },
  { q: 'Do you work with international clients?', a: 'Absolutely! I work with clients worldwide and am comfortable with remote collaboration across different timezones.' },
  { q: 'What technologies do you work with?', a: 'PHP, Laravel, JavaScript, React, Flutter, MySQL, Firebase, and various modern web technologies and frameworks.' }
]

type FieldKey = 'name' | 'email' | 'subject' | 'message'
const form = reactive<Record<FieldKey, string>>({ name: '', email: '', subject: '', message: '' })
const errors = reactive<Record<FieldKey, string>>({ name: '', email: '', subject: '', message: '' })
const sent = ref(false)
const fieldLabels: Record<FieldKey, string> = { name: 'Full Name', email: 'Email Address', subject: 'Subject', message: 'Your Message' }
const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

function validateField(key: FieldKey) {
  const v = form[key].trim()
  if (!v) errors[key] = `${fieldLabels[key]} is required.`
  else if (key === 'email' && !emailRe.test(v)) errors[key] = 'Please enter a valid email address.'
  else errors[key] = ''
  return !errors[key]
}

function onSubmit() {
  sent.value = false
  const keys: FieldKey[] = ['name', 'email', 'subject', 'message']
  const results = keys.map(validateField)
  if (results.includes(false)) {
    const firstBad = keys[results.indexOf(false)]
    document.getElementById(firstBad)?.focus()
    return
  }
  const body = `Name: ${form.name.trim()}\nEmail: ${form.email.trim()}\n\n${form.message.trim()}`
  const url = `mailto:${EMAIL}?subject=${encodeURIComponent(form.subject.trim())}&body=${encodeURIComponent(body)}`
  sent.value = true
  window.location.href = url
}
</script>

<template>
  <div>
    <PageHero
      eyebrow="Get In Touch"
      title="Let's"
      accent="Connect"
      subtitle="Have a project in mind, a question, or just want to say hello? I'd love to hear from you!"
    />

    <!-- Contact info cards -->
    <section class="section info">
      <div class="container">
        <ul class="grid grid--3 plain">
          <li v-for="(c, i) in infoCards" :key="c.title" v-reveal :style="{ '--reveal-delay': `${i * 80}ms` }">
            <component
              :is="c.href ? 'a' : 'div'"
              :href="c.href"
              class="card-surface lift info-card"
              :class="{ link: c.href }"
            >
              <span class="icon-badge"><i :class="['pi', c.icon]" aria-hidden="true" /></span>
              <h2 class="card-title">{{ c.title }}</h2>
              <p class="muted">{{ c.text }}</p>
              <span class="action">{{ c.action }} <i v-if="c.href" class="pi pi-arrow-right" aria-hidden="true" /></span>
            </component>
          </li>
        </ul>
      </div>
    </section>

    <!-- Form + socials -->
    <section class="section section--alt">
      <div class="container main-grid">
        <div v-reveal class="card-surface form-card">
          <SectionHeading
            eyebrow="Message"
            title="Send Me a"
            accent="Message"
            subtitle="Fill out the form below and I'll get back to you as soon as possible."
          />
          <form novalidate class="form" @submit.prevent="onSubmit">
            <div class="field-row">
              <div class="field">
                <label for="name"><i class="pi pi-user" aria-hidden="true" /> Full Name</label>
                <InputText
                  id="name" v-model="form.name" name="name" type="text" placeholder="Your Name" fluid
                  autocomplete="name" required aria-required="true"
                  :invalid="!!errors.name" :aria-invalid="errors.name ? 'true' : 'false'"
                  :aria-describedby="errors.name ? 'name-err' : undefined" @blur="validateField('name')"
                />
                <p v-if="errors.name" id="name-err" class="err">{{ errors.name }}</p>
              </div>
              <div class="field">
                <label for="email"><i class="pi pi-envelope" aria-hidden="true" /> Email Address</label>
                <InputText
                  id="email" v-model="form.email" name="email" type="email" placeholder="Your Email" fluid
                  autocomplete="email" required aria-required="true"
                  :invalid="!!errors.email" :aria-invalid="errors.email ? 'true' : 'false'"
                  :aria-describedby="errors.email ? 'email-err' : undefined" @blur="validateField('email')"
                />
                <p v-if="errors.email" id="email-err" class="err">{{ errors.email }}</p>
              </div>
            </div>
            <div class="field">
              <label for="subject"><i class="pi pi-bookmark" aria-hidden="true" /> Subject</label>
              <InputText
                id="subject" v-model="form.subject" name="subject" type="text" placeholder="Subject" fluid
                required aria-required="true"
                :invalid="!!errors.subject" :aria-invalid="errors.subject ? 'true' : 'false'"
                :aria-describedby="errors.subject ? 'subject-err' : undefined" @blur="validateField('subject')"
              />
              <p v-if="errors.subject" id="subject-err" class="err">{{ errors.subject }}</p>
            </div>
            <div class="field">
              <label for="message"><i class="pi pi-comment" aria-hidden="true" /> Your Message</label>
              <Textarea
                id="message" v-model="form.message" name="message" placeholder="Your Message" rows="5" fluid
                required aria-required="true"
                :invalid="!!errors.message" :aria-invalid="errors.message ? 'true' : 'false'"
                :aria-describedby="errors.message ? 'message-err' : undefined" @blur="validateField('message')"
              />
              <p v-if="errors.message" id="message-err" class="err">{{ errors.message }}</p>
            </div>
            <Button type="submit" label="Send Message" icon="pi pi-send" fluid />
            <div role="status" aria-live="polite">
              <Message v-if="sent" severity="success" :closable="false">
                Thanks! Your email app should open with your message ready to send to {{ EMAIL }}. If nothing opens, please email me directly.
              </Message>
            </div>
          </form>
        </div>

        <div v-reveal class="connect stack">
          <SectionHeading
            eyebrow="Connect"
            title="Let's Be"
            accent="Social"
            subtitle="Follow me on social media to stay updated with my latest projects and tech adventures."
          />
          <ul class="plain social-list">
            <li v-for="s in socials" :key="s.title">
              <a :href="s.href" target="_blank" rel="noopener noreferrer" class="card-surface lift social">
                <span class="icon-badge"><i :class="['pi', s.icon]" aria-hidden="true" /></span>
                <span class="social-info">
                  <h3 class="social-title">{{ s.title }}</h3>
                  <span class="muted">{{ s.text }}</span>
                </span>
                <i class="pi pi-arrow-up-right" aria-hidden="true" />
                <span class="sr-only">(opens in a new tab)</span>
              </a>
            </li>
          </ul>
          <div class="card-surface availability">
            <span class="dot" aria-hidden="true" />
            <div>
              <h3 class="social-title">Currently Available</h3>
              <p class="muted">Open to freelance, contract, or full-time opportunities</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Quick response -->
    <section class="section">
      <div class="container">
        <ul class="grid grid--3 plain">
          <li v-for="(r, i) in responses" :key="r.title" v-reveal :style="{ '--reveal-delay': `${i * 80}ms` }">
            <div class="card-surface lift info-card">
              <span class="icon-badge"><i :class="['pi', r.icon]" aria-hidden="true" /></span>
              <h2 class="card-title">{{ r.title }}</h2>
              <p class="muted">{{ r.text }}</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- FAQ -->
    <section class="section section--alt">
      <div class="container faq">
        <SectionHeading eyebrow="FAQ" title="Frequently" accent="Asked" center />
        <Accordion value="0">
          <AccordionPanel v-for="(f, i) in faqs" :key="f.q" :value="String(i)">
            <AccordionHeader>{{ f.q }}</AccordionHeader>
            <AccordionContent>
              <p class="muted">{{ f.a }}</p>
            </AccordionContent>
          </AccordionPanel>
        </Accordion>
      </div>
    </section>
  </div>
</template>

<style scoped>
.plain { list-style: none; padding: 0; margin: 0; }
.info-card {
  display: flex; flex-direction: column; align-items: flex-start; gap: var(--space-2);
  height: 100%; text-align: left; color: var(--text); text-decoration: none;
}
.info-card p { margin: 0; overflow-wrap: anywhere; }
.info-card.link:hover { border-color: var(--primary); color: var(--text); }
.card-title { font-size: var(--fs-xl); margin: var(--space-2) 0 0; }
.icon-badge {
  display: inline-grid; place-items: center; width: 3rem; height: 3rem; border-radius: 50%;
  background: var(--surface-2); color: var(--primary); font-size: 1.25rem; flex: none;
}
.action { margin-top: auto; padding-top: var(--space-2); color: var(--primary); font-weight: 600; font-size: var(--fs-sm); }

.main-grid { display: grid; gap: var(--space-7); align-items: start; }
@media (min-width: 992px) { .main-grid { grid-template-columns: 7fr 5fr; } }
.form-card { padding: var(--space-5); }
@media (min-width: 768px) { .form-card { padding: var(--space-6); } }
.form { display: grid; gap: var(--space-4); --err: #b3261e; }
:global(.app-dark) .form { --err: #ff9a94; }
.field-row { display: grid; gap: var(--space-4); }
@media (min-width: 768px) { .field-row { grid-template-columns: 1fr 1fr; } }
.field { display: flex; flex-direction: column; gap: var(--space-2); min-width: 0; }
.field label { font-weight: 600; color: var(--text); }
.field label i { color: var(--primary); margin-right: var(--space-2); }
.err { color: var(--err); font-size: var(--fs-sm); margin: 0; }
.form :deep(.p-inputtext[aria-invalid='true']) { border-color: var(--err); }

.social-list { display: grid; gap: var(--space-4); }
.social { display: flex; align-items: center; gap: var(--space-4); color: var(--text); text-decoration: none; }
.social:hover { border-color: var(--primary); color: var(--text); }
.social-info { flex: 1; display: flex; flex-direction: column; }
.social-title { font-size: var(--fs-lg); margin: 0; }
.availability { display: flex; align-items: flex-start; gap: var(--space-4); }
.availability p { margin: 0; }
.dot {
  flex: none; width: 0.9rem; height: 0.9rem; margin-top: 0.4rem; border-radius: 50%;
  background: var(--primary); animation: pulse 1.8s ease-out infinite;
}

.faq { max-width: 52rem; }
.faq :deep(.p-accordioncontent-content p) { margin: 0; }
</style>
