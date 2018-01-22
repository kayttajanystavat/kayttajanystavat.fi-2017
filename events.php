<?php

$token = trim(file_get_contents('../eventbrite.token'));
$url = 'https://www.eventbriteapi.com/v3/users/me/owned_events/?token=' . $token;
$url .= '&order_by=start_desc';
$json = file_get_contents($url);
$result = json_decode($json, true);

print "<h2>Ilmoittaudu seuraavaan tapahtumaan</h2>";

foreach ($result['events'] as $event) {
  // Skip past events
  if (strtotime($event['start']['local']) < time()) {
    continue;
  }

  $event_name = $event['name']['text'];
  $event_url = $event['url'];
  $event_start_datetime = strtotime($event['start']['local']);
  include('event_template.inc');
}
