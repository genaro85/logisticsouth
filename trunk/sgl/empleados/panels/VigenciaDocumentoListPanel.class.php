<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the VigenciaDocumento class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of VigenciaDocumento objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this VigenciaDocumentoListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage Drafts
	 * 
	 */
	class VigenciaDocumentoListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list VigenciaDocumentos
		/**
		 * @var VigenciaDocumentoDataGrid
		 */
		public $dtgVigenciaDocumentos;

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
			$this->Template = __DOCROOT__ . __PANEL_DRAFTS__ . '/VigenciaDocumentoListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgVigenciaDocumentos = new VigenciaDocumentoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgVigenciaDocumentos->CssClass = 'datagrid';
			$this->dtgVigenciaDocumentos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgVigenciaDocumentos->Paginator = new QPaginator($this->dtgVigenciaDocumentos);
			$this->dtgVigenciaDocumentos->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgVigenciaDocumentos->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for VIGENCIA_DOCUMENTO's properties, or you
			// can traverse down QQN::VIGENCIA_DOCUMENTO() to display fields that are down the hierarchy)
			$this->dtgVigenciaDocumentos->MetaAddColumn(QQN::VigenciaDocumento()->LICENCIAIdLICENCIAObject);
			$this->dtgVigenciaDocumentos->MetaAddColumn(QQN::VigenciaDocumento()->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject);
			$this->dtgVigenciaDocumentos->MetaAddColumn('FechaOtorgado');
			$this->dtgVigenciaDocumentos->MetaAddColumn('FechaVencimieto');
			$this->dtgVigenciaDocumentos->MetaAddColumn('NumRef');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('VigenciaDocumento');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new VigenciaDocumentoEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0], $strParameterArray[1]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new VigenciaDocumentoEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>