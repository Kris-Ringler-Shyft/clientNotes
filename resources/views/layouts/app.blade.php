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
            <a href="/client/{{$client->id}}" ">{{$client->name}}</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <!--for each note on each client -->

                  @foreach($client_notes as $c_note)
                <li>{{$c_note}}</li>
                  @endforeach
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
        <h2>Note Content</h2>


        @yield('note')


    </div>
</div>
</div>


    </body>
<script>

</script>
</html>


<!--
    **dropdown classes within client sidebar**
    data-toggle="collapse" aria-expanded="false" class="dropdown-toggle -->
