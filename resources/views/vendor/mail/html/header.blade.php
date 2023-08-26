@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('https://i.postimg.cc/cHpPvCmn/concert-spot-logo-3.png') }}"  class="logo" alt="ConcertSpot Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
