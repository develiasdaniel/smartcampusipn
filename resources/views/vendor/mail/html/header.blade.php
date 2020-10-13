<tr>
<td class="header">
    <img src="data:image/png;base64,{{base64_encode(file_get_contents(public_path('img\logocic.png')))}}" alt="">
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="{{ $url }}">
    {{ $slot }}
    </a>
</td>
</tr>
