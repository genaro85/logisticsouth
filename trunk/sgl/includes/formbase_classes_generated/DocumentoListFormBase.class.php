<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Documento class.  It uses the code-generated
	 * DocumentoDataGrid control which has meta-methods to help with
	 * easily creating/defining Documento columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both documento_list.php AND
	 * documento_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DocumentoListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list Documentos
		/**
		 * @var DocumentoDataGrid dtgDocumentos
		 */
		protected $dtgDocumentos;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			parent::Form_Create();
			
			// Instantiate the Meta DataGrid
			$this->dtgDocumentos = new DocumentoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDocumentos->CssClass = 'datagrid';
			$this->dtgDocumentos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDocumentos->Paginator = new QPaginator($this->dtgDocumentos);
			$this->dtgDocumentos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/documento_edit.php';
			$this->dtgDocumentos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for DOCUMENTO's properties, or you
			// can traverse down QQN::DOCUMENTO() to display fields that are down the hierarchy)
			$this->dtgDocumentos->MetaAddColumn('IdDOCUMENTO');
			$this->dtgDocumentos->MetaAddColumn('Nombre');
			$this->dtgDocumentos->MetaAddColumn('Duracion');
			$this->dtgDocumentos->MetaAddColumn(QQN::Documento()->DocumentosFase);
		}
	}
?>
