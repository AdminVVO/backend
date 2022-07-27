<div class="medio_calendar_admin">

    
            <?php echo $divs; ?>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    table {
        table-layout: fixed;
        width: 100%;
    }

    td,
    th {
        vertical-align: top;
        border: 1px solid rgb(255, 255, 255);
        padding-right: 10px;

        padding-bottom: 10px;
        width: 100px;
    }

    td div {
        border: 1px solid rgb(255, 0, 0);
    }


    .outer {
        position: relative
    }

    .inner {
        overflow-x: scroll;
        overflow-y: visible;
        width: 500px;
        max-height: 200px;
        margin-left: 100px;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.js"></script>
<script>
    const lista2 = document.getElementById('lista2');
    const lista3 = document.getElementById('lista3');
    const lista4 = document.getElementById('lista4');
    const lista5 = document.getElementById('lista5');
    const lista6 = document.getElementById('lista6');
    const lista7 = document.getElementById('lista7');
    const lista8 = document.getElementById('lista8');
    const lista9 = document.getElementById('lista9');
    const lista10 = document.getElementById('lista10');
    const lista11 = document.getElementById('lista11');
    const lista12 = document.getElementById('lista12');
    const lista13 = document.getElementById('lista13');
    const lista14 = document.getElementById('lista14');
    let content = null;
    // new Sortable(lista, {
    //     animation: 150,
    //     ghostClass: 'blue-background-class'
    // });


    new Sortable(lista2, {
        group: 'shared',
        animation: 150
    });

    new Sortable(lista3, {
        group: 'shared',
        animation: 150
    });

    new Sortable(lista4, {
        group: 'shared',
        animation: 150
    });

    new Sortable(lista5, {
        group: 'shared',
        animation: 150
    });

    new Sortable(lista6, {
        group: 'shared',
        animation: 150
    });

    new Sortable(lista7, {
        group: 'shared',
        animation: 150
    });

    new Sortable(lista8, {
        group: 'shared2',
        animation: 150
    });

    new Sortable(lista9, {
        group: 'shared2',
        animation: 150
    });

    new Sortable(lista10, {
        group: 'shared2',
        animation: 150
    });

    new Sortable(lista11, {
        group: 'shared2',
        animation: 150
    });

    new Sortable(lista12, {
        group: 'shared2',
        animation: 150
    });

    new Sortable(lista13, {
        group: 'shared2',
        animation: 150
    });

    new Sortable(lista14, {
        group: 'shared2',
        animation: 150
    });

    document.querySelectorAll(".click").forEach(el => {
        el.addEventListener("click", e => {
            const id = e.target.getAttribute("id");
            console.log("Se ha clickeado el id " + id);
        });
    });

    document.getElementById("lista2").addEventListener("click", function() {
        saludar(this)
    });

    function saludar(e) {
        if (e.childElementCount > 2) {
            e.innerHTML = content
        } else {
            content = e.innerHTML
            console.log(content.trim())
        }
        // console.log(e.childElementCount);
    }
</script>
