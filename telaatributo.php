
<!DOCTYPE html>
<html>
<head>
    <title>Contador Interativo de lipino</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>

    <h1>Contador Interativo</h1>
    <table>

    <form action="./PHP/inseriratb.php">
        fome
        <input type="number" name="fome" id="valor-hab1" value="0" /> <br /> <br />
        <button id="aumentar" onclick="aumentar(1)">+</button>
        <button id="diminuir" onclick="diminuir(2)">-</button> <br /> <br />
    
        sorte
        <input type="number" name="sorte" id="valor-hab2" value="0" /> <br /> <br />
        <button id="aumentar" onclick="aumentar(2)">+</button>
        <button id="diminuir" onclick="diminuir(2)">-</button> <br /> <br />
    
        malícia
        <input type="number" name="malicia" id="valor-hab3" value="0" /> <br /> <br />
        <button id="aumentar" onclick="aumentar(3)">+</button>
        <button id="diminuir" onclick="diminuir(3)">-</button> <br /> <br />

    
    </form>

    <script>
        function aumentar(p) {
            const inputs = document.getElementById("valor-hab" + p)
            const valorVar = parseInt(inputs.value)

            if (inputs.value < 100) {
                const calculo = valorVar + 1
                inputs.value = calculo
            }
            
        }

        function diminuir(p) {
            const inputs = document.getElementById("valor-hab" + p)
            const valorVar = parseInt(inputs.value)

            if (inputs.value > 0) {
                const calculo = valorVar - 1
                inputs.value = calculo
            }
            
        }
        </script>
</body>
</html>