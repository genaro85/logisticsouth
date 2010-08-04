<?php
	// Load the QCubed Development Framework
	require('../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/VigenciaDocumentoEditFormBase.class.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the VigenciaDocumento class.  It uses the code-generated
	 * VigenciaDocumentoMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a VigenciaDocumento columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both vigencia_documento_edit.php AND
	 * vigencia_documento_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class VigenciaDocumentoEditForm extends VigenciaDocumentoEditFormBase {
		// Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// vigencia_documento_edit.tpl.php as the included HTML template file
	VigenciaDocumentoEditForm::Run('VigenciaDocumentoEditForm');
?>