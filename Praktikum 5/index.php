<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin = "anonymous">
</script>

<form action="" method="post">
    <label>Prodi</label>
    <select name="prodi" id="prodi" onchange="this.form.submit()">
        <option value="IF"> Teknik Informatika </option>
        <option value="EL"> Teknik Elektro </option>
        <option value="ME"> Teknik Mesin </option>
        <option value="TG"> Teknik Geofisika </option>
        <option value="GL"> Teknik Geologi </option>
    </select>
</form>  

<table border="1">
    <tr>
        <th> No. </th>
        <th> NIM </th>
        <th> Nama </th>
        <th> Program Studi </th>
    </tr>

    <?php
        include "koneksi.php";

        if(isset($_POST["prodi"])){
            $query = "SELECT * FROM mahasiswa WHERE Prodi = '$_POST[prodi]' ";
        }

        $result = mysqli_query($connection, $query);
        $i = 0;

        while ($data = mysqli_fetch_array($result)) :
        $i++;
        
    ?>
        <tr>
            <td> <?= $i ?> </td>
            <td> <?= $data["NIM"] ?> </td>
            <td> <?= $data["Nama"] ?> </td>
            <td> <?= $data["Prodi"] ?> </td>
        </tr>
    <?php
    endwhile
    ?>
</table>
