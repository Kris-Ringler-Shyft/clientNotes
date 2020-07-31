<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <style>
            .notes{
                background: orange
            }
            .side{
                background: green
            }

        #sidebar {


            background: #7386D5;


        }
        </style>
    </head>
    <body>
    <div class="container-fluid">


    <div class="row">
    <!-- Sidebar -->
    <nav id="sidebar" class="col-sm-2">
        <div class="sidebar-header">
            <h3>Client Notes</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Clients</p>
            <!-- for each client -->
            @foreach($clients as $client)

            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">{{$client->name}}</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <!--for each note on each client -->
                    <li>
                        <a href="#">Note 1</a>
                    </li>
                    <li>
                        <a href="#">Note 2</a>
                    </li>
                    <li>
                        <a href="#">Note 3</a>
                    </li>
                </ul>
            </li>

            @endforeach
        <form action="/create-client" method="post">
            <input type="text" name="name" placeholder="Client Name">
            {{csrf_field()}}
            <button type="submit">Create Client</button>
        </form>
    </nav>

    <!-- Page Content -->
    <div id="content" class="notes col-sm-10">
        <h1>Notes Go Here</h1>

        @foreach($notes as $note)

        <h2>{{$note->note_title}}</h2>
        <ul>
        <li>{{$note->note_content}}</li>
        </ul>

        @endforeach

        <form action="/create-note" method="post">
            <input type="text" name="note_title" placeholder="Title">
            <input type="text" name="note_content" placeholder="Content">
            {{csrf_field()}}
            <button type="submit">Create Note</button>
        </form>
    </div>
</div>
</div>


    </body>
<script>

</script>
</html>


{{-- <div class="row">
    <!-- Sidebar -->
    <nav id="sidebar" class="col-sm-4">
        <div class="sidebar-header">
            <h3>Bootstrap Sidebar</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Dummy Heading</p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>

    </nav>
    <!-- Page Content -->
    <div id="content" class="col-sm-8">
        <h1>Note Title</h1>
            <ul>
                <li>note content 1</li>
                <li>note content 2</li>
                <li>note content 3</li>
            </ul>
    </div>
</div> --}}
