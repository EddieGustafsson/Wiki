<!-- Deaktivate account -->

<div class="modal fade" tabindex="-1" id="deactivate-account" tabindex="-1" role="dialog" aria-labelledby="deactivate-account" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deactivate-account">Är du säker på att du vill göra det här?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $host;?>/_login" method="POST">
                        <div class="alert alert-danger" role="alert">
                            <i class="fas fa-exclamation-triangle"></i> Detta är oerhört viktigt.
                        </div>
                        <ul>
                            <li>Ditt konto kommer att <strong>deaktiveras</strong>.</li>
                            <li>Endast en <strong>adminstratör</strong> kommer kunna aktivera det igen</li>
                        </ul> 
                        <hr>
                        <div class="settings-section-modal">
                            <lable><strong>Ditt användarnamn:</strong></lable>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" aria-label="username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="settings-section-modal">
                            <lable><strong>Bekräfta ditt lösenord:</strong></lable>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" aria-label="username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" data-toggle="modal" data-dismiss="modal" data-target="#remove-account-check" class="btn btn-outline-danger btn-lg">Deaktivera konto</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

<!-- Remove account -->

<div class="modal fade" tabindex="-1" id="remove-account" tabindex="-1" role="dialog" aria-labelledby="remove-account" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="remove-account">Är du säker på att du vill göra det här?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $host;?>/_login" method="POST">
                        <div class="alert alert-danger" role="alert">
                            <i class="fas fa-exclamation-triangle"></i> Detta är oerhört viktigt.
                        </div>
                        <ul>
                            <li>Ditt konto kommer att raderas <strong>permanent</strong>. Det kommer alltså vara omöjligt att ångra detta val.</li>
                            <li>Vi på Marvel Wiki har inte möjlighet att återställa ditt konto.</li>
                        </ul> 
                        <hr>
                        <div class="settings-section-modal">
                            <lable><strong>Ditt användarnamn:</strong></lable>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" aria-label="username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="settings-section-modal">
                            <lable><strong>Bekräfta ditt lösenord:</strong></lable>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" aria-label="username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" data-toggle="modal" data-dismiss="modal" data-target="#remove-account-check" class="btn btn-outline-danger btn-lg">Fortsätt</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

<!-- Remove account check -->

<div class="modal fade" id="remove-account-check" tabindex="-1" role="dialog" aria-labelledby="remove-account-check" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="remove-account-check">Ditt konto kommer strax att raderas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $host;?>/_login" method="POST">
                        <div class="alert alert-danger" role="alert">
                            <i class="fas fa-exclamation-triangle"></i> Om du är säker på att du vill fortsätta, följ instruktionerna
                        </div>
                        <p><strong>Var vänlig och skriv, </strong><i>jag försäkrar på heder och samvete att jag vill ta bort mitt konto</i><strong>, nedan:</strong></p>
                        <hr>
                        <div class="settings-section-modal">
                            <div class="input-group input-group-sm">
                                <input id="no-paste" type="text" class="form-control" aria-label="safe" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-danger btn-lg">Ta bort detta konto</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

<!-- Change username -->

<div class="modal fade" id="change-username" tabindex="-1" role="dialog" aria-labelledby="change-username" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="change-username">Vill du verkligen ändra ditt användarnamn?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $host;?>/_login" method="POST">
                        <div class="alert alert-danger" role="alert">
                            <i class="fas fa-exclamation-triangle"></i> Oväntade dåliga saker kommer att hända om du inte läser detta!
                        </div>
                        <ul>
                            <li>Vi kommer <strong>inte</strong> att skapa omdirigeringar för din gamla profil.</li>
                            <li>Någon kan använda ditt gammla användarnamn.</li>
                            <li>Det kan ta några minuter att byta namn.</li>
                        </ul> 
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-danger btn-lg">Jag förstår, låt mig ändra mitt användarnamn</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

<!-- Login Form -->

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login">Logga in till Marvel Wiki</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $host;?>/_login" method="POST">
                        <label for="inputUsername" class="sr-only">Användarnamn</label>
                        <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Användarnamn" required autofocus>
                        <br>
                        <label for="inputPassword" class="sr-only">Lösenord</label>
                        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Lösenord" required>
                        <br>
                        <div class="checkbox mb-3 text-center">
                            <label>
                            <input type="checkbox" value="remember-me"> Kom ihåg mig
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger btn-lg">Logga in</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>