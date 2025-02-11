---
subject: "{{ event.title }} - You're In! 🎉"
---

# {{ event.title }}

Hi {{ contact.first_name }},

We gladly confirm your participation at the event **{{ event.title }}** at **{{ event.location.name }}**. We can't wait to welcome you and share this amazing event together! 

Here are the event details:

📆 {{ event.scheduled_at|date('l, j. F Y')  }}

🕒 {{ event.scheduled_at|date('H:i')  }}

📌 {{ event.location.name }} (<a href="{{ event.location.google_maps_url }}" target="_blank" rel="noopener noreferrer">Maps</a>)
<p style="color: #455a64; padding-top: -12px; padding-left: 28px;"> {{ event.location.address }}</p>

You can click here to <a href="https://www.google.com/calendar/render?action=TEMPLATE&text={{ event.title|url_encode }}&dates={{ event.scheduled_at|date('Ymd\THis\Z') }}/{{ event.finished_at|date('Ymd\THis\Z') }}&details=Event+organized+by+Food+Explorers.&location={{ event.location.address|url_encode }}"
    target="_blank" rel="noopener noreferrer"> add to Google Calendar</a>.
    
See you soon! 

Food Explorers Team
