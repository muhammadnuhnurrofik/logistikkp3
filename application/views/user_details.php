<!DOCTYPE html>

<html>

<head>

    <title>Mendapatkan IP, Browser & OS User Menggunakan Codeigniter</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>

<body>

    <div class="container">

        <h3 align="center">User Information</h3>

        <div class="table-responsive">

            <table class="table table-bordered table-striped">

                <tr>

                    <td><b>IP Address</b></td>

                    <td><?php echo $ip_address; ?></td>

                </tr>

                <tr>

                    <td><b>Operating System</b></td>

                    <td><?php echo $os; ?></td>

                </tr>

                <tr>

                    <td><b>Browser Details</b></td>

                    <td><?php echo $browser . ' - ' . $browser_version; ?></td>

                </tr>

            </table>

        </div>

        <a type="button" class="btn btn-primary" href="<?= base_url('user') ?>">
            Back
        </a>
    </div>

</body>


</html>