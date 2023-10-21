<?php
require_once('header.php');
include_once("../backend/db.php");

$records = mysqli_query($con,"select * from users where type<>0");

if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM `users` where `id`='$id'";
    mysqli_query($con, $sql) or die("database error:". mysqli_error($con)."qqq".$sql);			
    echo '<script type="text/javascript"> alert("Deleted Successfully!"); window.location.href="accounts.php";</script>';  // alert message
}
?>

<style>
    #fh5co-header-section
    {
        background: black;
    }
    .reservations {
        margin: 1rem;
        margin-top: 6%;
    }

    table {
        --accent-color: #362f4b;
        --text-color: slategray;
        --bgColorDarker: #ececec;
        --bgColorLighter: #fcfcfc;
        --insideBorderColor: lightgray;
        width: 100%;
        margin: 0;
        padding: 0;
        border: 1px solid var(--accent-color);
        border-collapse: collapse;
        color: var(--text-color);
        table-layout: fixed;
    }

    table caption {
        margin: 1rem 0;
        color: slategray;
        font-size: 1.5rem;
        font-weight: 600;
        letter-spacing: 0.055rem;
        text-align: center;
    }

    table thead tr {
        color: whitesmoke;
        background-color: var(--accent-color);
        font-size: 1rem;
    }

    table tbody tr {
        border: 1px solid var(--insideBorderColor);
        background-color: var(--bgColorDarker);
    }

    table tbody tr:nth-child(odd) {
        background-color: var(--bgColorLighter);
    }

    table th {
        letter-spacing: 0.075rem;
    }

    table th,
    table td {
        padding: 0.75rem 1rem;
        font-weight: normal;
        text-align: left;
    }

    table th:nth-child(4),
    table td:nth-child(4) {
        text-align: right;
    }

    @media screen and (max-width: 768px) {
        table {
            border: none;
        }

        table caption {
            padding: 0.75rem 1rem;
            border-radius: 6px 6px 0 0;
            color: whitesmoke;
            font-size: 1.35rem;
            background-color: var(--accent-color);
        }

        table thead {
            position: absolute;
            width: 1px;
            height: 1px;
            clip: rect(0 0 0 0);
            overflow: hidden;
        }

        table tbody tr {
            margin-bottom: 2rem;
            display: block;
        }

        table td {
            font-size: 0.875rem;
            text-align: right;
            display: block;
        }

        table td:before {
            content: attr(data-label);
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
            float: left;
            opacity: 0.5;
        }

        table td:not(:last-child) {
            border-bottom: 1px solid var(--insideBorderColor);
        }
    }

</style>

<div class="reservations">

    <table>
        <caption>Accounts</caption>
        <thead>
            <tr>
                <th>Account Name</th>
                <th>Account Email</th>
                <th>Account Phone</th>
                <th>Account Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($data = mysqli_fetch_array($records))
        {
        ?>
            <tr>
                <td data-label="Projeto"><?php echo $data['username'] ?></td>
                <td data-label="Descrição"><?php echo $data['email'] ?></td>
                <td data-label="Administrador"><?php echo $data['phone'] ?></td>
                <td data-label="Aplicações">
                <?php if($data['type'] == 1){ ?>
                    Tourit
                <?php } ?>
                <?php if($data['type'] == 2){ ?>
                    Company
                <?php } ?>
                <?php if($data['type'] == 3){ ?>
                    Family
                <?php } ?>
                </td>
                <td data-label="Criado">
                <form action="accounts.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <button type="submit" name="delete" class="button btn-danger btn-sm">Delete Account</button>
                </form>
                </td>
            </tr>
        <?php
        }
        ?>

        </tbody>
    </table>

</div>




<?php
require_once('footer.php');
?>