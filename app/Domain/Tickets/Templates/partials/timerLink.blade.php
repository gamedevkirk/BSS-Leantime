@props([
    'parentTicketId' => false,
    'onTheClock' => false
 ])

<li id="timerContainer-{{ $parentTicketId }}"
    hx-get="{{BASE_URL}}/tickets/timerButton/get-status/{{ $parentTicketId }}"
    hx-trigger="timerUpdate from:body"
    hx-swap="outerHTML"
    class="timerContainer">
</li>

