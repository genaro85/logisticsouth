<?php
require_once('../includes/configuration/prepend.inc.php');
class LoginForm extends QForm {
    protected $txtUsername;
    protected $txtPassword;
    protected $btnLogin;
    protected function Form_Create() {
        $this->txtUsername = new QTextBox($this);
        $this->txtUsername->Name = 'Usuario';
        $this->txtUsername->Text = 'login';
        $this->txtPassword = new QTextBox($this);
        $this->txtPassword->Name = 'Contrase&ntilde;a';
        $this->txtPassword->Text = 'pass';
        $this->txtPassword->TextMode = QTextMode::Password;
        $this->btnLogin = new QButton($this);
        $this->btnLogin->Text = QApplication::Translate('GO');
        $this->btnLogin->AddAction(new QClickEvent(), new QServerAction('btnLogin_Click'));
        $this->btnLogin->PrimaryButton = true;


    }
    protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {
        $objUserAdmin = Administrador::LoadByAmLog($this->txtUsername->Text);
        $objUserEm = Empleado::LoadByEmLog($this->txtUsername->Text);

        if ($objUserEm && $objUserEm->Password == $this->txtPassword->Text) {
            $_SESSION['User'] = serialize($objUserEm);
            QApplication::Redirect('../empleado/index.php');
        }

        if ($objUserAdmin && $objUserAdmin->Password == $this->txtPassword->Text) {
            $_SESSION['User'] = serialize($objUserAdmin);
            QApplication::Redirect('../administrador/index.php');
        }

        $this->txtPassword->Text = "";
        $this->txtPassword->Warning = " Usuario o clave incorrectos";
        return;
    }
}
LoginForm::Run('LoginForm', 'login.tpl.php');
?>