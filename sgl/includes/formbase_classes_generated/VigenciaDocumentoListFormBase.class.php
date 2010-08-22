<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the VigenciaDocumento class.  It uses the code-generated
	 * VigenciaDocumentoDataGrid control which has meta-methods to help with
	 * easily creating/defining VigenciaDocumento columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both vigencia_documento_list.php AND
	 * vigencia_documento_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class VigenciaDocumentoListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list VigenciaDocumentos
		/**
		 * @var VigenciaDocumentoDataGrid dtgVigenciaDocumentos
		 */
		protected $dtgVigenciaDocumentos;

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
			$this->dtgVigenciaDocumentos = new VigenciaDocumentoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgVigenciaDocumentos->CssClass = 'datagrid';
			$this->dtgVigenciaDocumentos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgVigenciaDocumentos->Paginator = new QPaginator($this->dtgVigenciaDocumentos);
			$this->dtgVigenciaDocumentos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/vigencia_documento_edit.php';
			$this->dtgVigenciaDocumentos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for VIGENCIA_DOCUMENTO's properties, or you
			// can traverse down QQN::VIGENCIA_DOCUMENTO() to display fields that are down the hierarchy)
			$this->dtgVigenciaDocumentos->MetaAddColumn(QQN::VigenciaDocumento()->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject);
			$this->dtgVigenciaDocumentos->MetaAddColumn(QQN::VigenciaDocumento()->LICENCIAIdLICENCIAObject);
			$this->dtgVigenciaDocumentos->MetaAddColumn('FechaOtorgado');
			$this->dtgVigenciaDocumentos->MetaAddColumn('FechaVencimieto');
			$this->dtgVigenciaDocumentos->MetaAddColumn('NumRef');
		}
	}
?>
