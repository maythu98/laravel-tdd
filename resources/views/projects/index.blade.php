<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Title</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td> 
                    <a href="{{ $project->path() }}"> {{ $project->title }} </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>