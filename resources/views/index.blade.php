<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest Books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

    <div class="container">
            <h1>Guest Books</h1>
            <div class="card">
                <div class="card-body">
                    <h3>Nama</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque mollitia voluptates aliquam asperiores culpa, obcaecati dicta alias et architecto hic autem laudantium recusandae magni, ut quaerat numquam accusantium sit sequi?</p>
                </div>
            </div>

            <hr>

            <div class="card">
                <div class="card-body">
                    <h1>Leave Your Message</h1>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="" class="label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="" class="label">Message</label>
                            <textarea name="message" id="editor" cols="30" rows="4" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Send" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>
</body>
</html>
