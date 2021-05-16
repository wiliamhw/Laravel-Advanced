<table>
    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->active }}</td>
            <td>{{ $post->title }}</td>
        </tr>
    @endforeach
</table>

<div style="width: 10px; height:10px;">
    {{ $posts->appends(request()->input())->links() }}
</div>
