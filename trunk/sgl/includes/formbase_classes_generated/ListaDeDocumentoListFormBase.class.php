<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the ListaDeDocumento class.  It uses the code-generated
	 * ListaDeDocumentoDataGrid control which has meta-methods to help with
	 * easily creating/defining ListaDeDocumento columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both lista_de_documento_list.php AND
	 * lista_de_documento_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class ListaDeDocumentoListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list ListaDeDocumentos
		/**
		 * @var ListaDeDocumentoDataGrid dtgListaDeDocumentos
		 */
		protected $dtgListaDeDocumentos;

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
			$this->dtgListaDeDocumentos = new ListaDeDocumentoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgListaDeDocumentos->CssClass = 'datagrid';
			$this->dtgListaDeDocumentos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgListaDeDocumentos->Paginator = new QPaginator($this->dtgListaDeDocumentos);
			$this->dtgListaDeDocumentos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/lista_de_documento_edit.php';
			$this->dtgListaDeDocumentos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for LISTA_DE_DOCUMENTO's properties, or you
			// can traverse down QQN::LISTA_DE_DOCUMENTO() to display fields that are down the hierarchy)
			$this->dtgListaDeDocumentos->MetaAddColumn(QQN::ListaDeDocumento()->DOCUMENTOIdDOCUMENTOObject);
			$this->dtgListaDeDocumentos->MetaAddColumn(QQN::ListaDeDocumento()->PROCESOIdPROCESOObject);
			$this->dtgListaDeDocumentos->MetaAddColumn(QQN::ListaDeDocumento()->FASEIdFASEObject);
		}
	}
?>
