<?php
	// Load the QCubed Development Framework
	require('../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/DocumentosFaseListFormBase.class.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DocumentosFase class.  It uses the code-generated
	 * DocumentosFaseDataGrid control which has meta-methods to help with
	 * easily creating/defining DocumentosFase columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both documentos_fase_list.php AND
	 * documentos_fase_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class DocumentosFaseListForm extends DocumentosFaseListFormBase {
		// Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// documentos_fase_list.tpl.php as the included HTML template file
	DocumentosFaseListForm::Run('DocumentosFaseListForm');
?>