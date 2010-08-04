<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Documento class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Documento objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this DocumentoListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage Drafts
	 * 
	 */
	class DocumentoListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Documentos
		/**
		 * @var DocumentoDataGrid
		 */
		public $dtgDocumentos;

		// Other public QControls in this panel
		/**
		 * @var QButton CreateNew
		 */
		public $btnCreateNew;
		/**
		 * @var QControlProxy ProxyEdit
		 */
		public $pxyEdit;

		// Callback Method Names
		/**
		 * @var string SetEditPanelMethod
		 */
		protected $strSetEditPanelMethod;
		/**
		 * @var string CloseEditPanelMethod
		 */
		protected $strCloseEditPanelMethod;
		
		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Record Method Callbacks
			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			// Setup the Template
			$this->Template = __DOCROOT__ . __PANEL_DRAFTS__ . '/DocumentoListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgDocumentos = new DocumentoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDocumentos->CssClass = 'datagrid';
			$this->dtgDocumentos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDocumentos->Paginator = new QPaginator($this->dtgDocumentos);
			$this->dtgDocumentos->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgDocumentos->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for DOCUMENTO's properties, or you
			// can traverse down QQN::DOCUMENTO() to display fields that are down the hierarchy)
			$this->dtgDocumentos->MetaAddColumn('IdDOCUMENTO');
			$this->dtgDocumentos->MetaAddColumn('Nombre');
			$this->dtgDocumentos->MetaAddColumn('Duracion');
			$this->dtgDocumentos->MetaAddColumn(QQN::Documento()->ListaDeDocumento);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Documento');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new DocumentoEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new DocumentoEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>