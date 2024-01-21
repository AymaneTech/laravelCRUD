<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="font-sans bg-gray-100">

<div class="container mx-auto my-8 p-8 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-8">Edit Post</h1>

    <form action="/edit-post/{{$post->id}}" method="post">
        @csrf
        @method("PUT")

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
            <input type="text" name="title" id="title" value="{{$post->title}}" class="w-full border p-2">
        </div>

        <div class="mb-4">
            <label for="body" class="block text-sm font-medium text-gray-600">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="w-full border p-2">{{$post->body}}</textarea>
        </div>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save Changes</button>
    </form>
</div>

</body>

</html>
