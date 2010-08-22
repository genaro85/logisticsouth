<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the DocumentosFase class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of DocumentosFase objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this DocumentosFaseListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage Drafts
	 * 
	 */
	class DocumentosFaseListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list DocumentosFases
		/**
		 * @var DocumentosFaseDataGrid
		 */
		public $dtgDocumentosFases;

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
			$this->Template = __DOCROOT__ . __PANEL_DRAFTS__ . '/DocumentosFaseListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgDocumentosFases = new DocumentosFaseDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDocumentosFases->CssClass = 'datagrid';
			$this->dtgDocumentosFases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDocumentosFases->Paginator = new QPaginator($this->dtgDocumentosFases);
			$this->dtgDocumentosFases->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgDocumentosFases->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for DOCUMENTOS_FASE's properties, or you
			// can traverse down QQN::DOCUMENTOS_FASE() to display fields that are down the hierarchy)
			$this->dtgDocumentosFases->MetaAddColumn(QQN::DocumentosFase()->DOCUMENTOIdDOCUMENTOObject);
			$this->dtgDocumentosFases->MetaAddColumn(QQN::DocumentosFase()->FASEIdFASEObject);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('DocumentosFase');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new DocumentosFaseEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new DocumentosFaseEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>