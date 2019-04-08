<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<thead>
			<th>id</th>
			<th>title</th>
			<th>content</th>
			<th>view</th>
			<th>delete</th>
		</thead>
		<tbody>
			@foreach($posts as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td>{{ $post->content }}</td>
				<td>{{ $post->view }}</td>
				<td><a href="{{ route('post.delete', ['id' => $post->id])}}">delete</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>