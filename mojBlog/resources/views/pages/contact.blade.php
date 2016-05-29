@extends('main')

@section('tittle', '| Kontakt')

@section('content')

        <div class="row">
            <div>
                <h1>Kontakt</h1>
                <hr>
                <form>
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name"email" class="form-control">

                    </div>
                    <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input id="subject" name"subject" class="form-control">

                    </div>
                    <div class="form-group">
                        <label name="poruka">Poruka:</label>
                        <textarea id="poruka" name"poruka" class="form-control">Napišite Vašu poruku ovde...</textarea>

                    </div>
                    <input type="submit" value="Pošalji poruku" class="btn btn-success">
                </form>
            </div>
        </div>
    
@endsection    