<?php include  'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
<!-- para cachar mas parametros con &  y variable  con ? -->

            <h2 class="titulo">Libros</h2>

            
                <form action="proceso.php" method="post"> 
                <h3 style=" color: blue " >-Libros</h3>


                <hr>
                <label for="1">Entregaste los libros el mismo dia?</label>

                
                <select name="mismoDia"  class="form-select" id="1" required>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>

                

                <label for="libroAtrasado">Libro atrasado</label>
                <input type="number" class="form-control" id="libroAtrasado" name="libroAtrasado" required>

                <label for="diaAtraso">Dia de atraso</label>
                <input type="number" class="form-control" id="diaAtraso" name="diaAtraso" required>


                <button class="btn btn-primary mt-3">enviar....</button>
                </form>

    </div>


            

<?php include  'footer.php'; ?>



<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4e8ff;
        margin: 0;
        padding: 0;
    }

    .titulo {
        text-align: center;
        font-size: 28px;
        color:rgb(85, 28, 81);
        margin-top: 20px;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .contenedor-juegos {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .card {
        background: #ffffff;
        border: 2px solid rgb(100, 37, 177);
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
        transition: transform 0.2s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card a {
        text-decoration: none;
        color:rgb(126, 34, 255);
        font-size: 18px;
        font-weight: bold;
    }

    .card a:hover {
        color: #9b4dff;
    }
</style>



