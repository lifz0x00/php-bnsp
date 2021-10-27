<?php
    include '../connection.php';
    session_start();

    if( isset($_GET['user_id']) ){

    // ambil id dari query string
    $user_id = $_GET['user_id'];

    // buat query hapus
    $sql = "DELETE FROM users_tb WHERE user_id=$user_id";
    $query = mysqli_query($conn, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: index.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
?>