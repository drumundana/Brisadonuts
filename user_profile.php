<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/style.css" rel="stylesheet" type="text/css">
        <title>user profile</title>
    </head>
    <body>
        <div>
            <h1>Account Setting</h1>
            <div class="card overflow-hidden">
                        <div class="list-group list-group-flush account-setting-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-my-details">My Details</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-payment-details">Payment Details</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-delete-account">Delete Account</a>
                        </div>
            </div>
            <div class="tab-pane fade active show" id="account-my-details">
            <div class="card-body media align-items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt
                                    class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
            </div>
        </div>
        <hr class="border-light m-0">
        <div class="card-body">
            <div class="form-group">
            <label class="form-label">Username</label>
            <input type="text" class="form-control mb-1">
        </div>
        <div class="form-group">
            <label class="form-label">Full name</label>
            <input type="text" class="form-control">
        </div>
        <div class="card-body">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="text" class="form-control mb-1">
            <div class="alert alert-warning mt-3">
                Your email is not confirmed. Please check your inbox.<br>
                <a href="javascript:void(0)">Resend confirmation</a>
            </div>        
        </div>
        <label>Adress</label>
        <div class="form-group">
            <label class="form-label">Street number</label>
            <input type="number" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Street name</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">City</label>
            <select class="custom-select"></select>
        </div>
        <div class="form-group">
            <label class="form-label">Postcode</label>
            <select class="custom-select"></select>
        </div>
        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-default">Cancel</button>
        </div>
        <div class="tab-pane fade" id="account-change-password">
            <div class="card-body pb-2">
                <div class="form-group">
                <label class="form-group">Current password</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label">New password</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label">Repeat new password</label>
                <input type="password" class="form-control">
            </div>
            <div class="text-right mt-3">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </div>
        <div class="tab-pane fade" id="account-payment-details">
            <div class="card-body pb-2">
                <label class="form-label">Payment details</label>
                    <form>
                    <label for="card-number">Número do Cartão:</label>
                    <input type="text" id="card-number" name="card-number" placeholder="0000 0000 0000 0000" required><br><br>

                    <label for="expiry-date">Data de Validade:</label>
                    <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/AA" required><br><br>

                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" placeholder="123" required><br><br>

                    <label for="card-holder-name">Nome no Cartão:</label>
                    <input type="text" id="card-holder-name" name="card-holder-name" required><br><br>

                    <input type="submit" value="Enviar">
                    </form>
            </div>
        </div>    



  








    <footer class="footer">
                
                <p>&copy; 2023 Brisa Donuts. All rights reserved.</p>
                <p>contato@brisadonuts.com</p>
    </footer>
    </body>
</html>