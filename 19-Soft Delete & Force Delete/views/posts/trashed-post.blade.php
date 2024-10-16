<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trashed Post</title>
    <style>
        .container{
            width: 1140px;
            margin: 50px auto;
        }
        table{
            border: 1px solid;
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
        th,td{
            border: 1px solid;
            padding: 5px;
        }
        ul.pagination li {
            list-style: none;
            border: 1px solid;
            display: inline-block;
            padding: 10px;
        }

        ul.pagination {
            display: flex;
            gap: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="trash">
            <a href="{{ route('posts.index') }}">All Post</a>
        </div>
        <br>
        <table>
            <tr>
                <th>Sl</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach ($trashedPosts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ substr($post->desc,0,30)."..."  }}</td>
                <td style="display:flex;justify-content:center;gap:10px">
                    <a href="{{ route('posts.restore',$post->id) }}">Restore</a>
                    <form id="deletePost-{{ $post->id }}" action="{{ route('posts.forceDelete',$post->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button onclick="postForceDelete({{ $post->id }})" type="button">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        
    </div>

<script>
   function postForceDelete(id) {
    let isConfirm =confirm('Are you sure to delete this post permanently?');
    if(isConfirm) {
        document.getElementById('deletePost-'+id).submit();
    }
   };

    
</script>
</body>
</html>