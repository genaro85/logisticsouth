<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Licencia class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Licencia objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this LicenciaListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage Drafts
	 * 
	 */
	class LicenciaListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Licencias
		/**
		 * @var LicenciaDataGrid
		 */
		public $dtgLicencias;

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
			$this->Template = __DOCROOT__ . __PANEL_DRAFTS__ . '/LicenciaListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgLicencias = new LicenciaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgLicencias->CssClass = 'datagrid';
			$this->dtgLicencias->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgLicencias->Paginator = new QPaginator($this->dtgLicencias);
			$this->dtgLicencias->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgLicencias->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for LICENCIA's properties, or you
			// can traverse down QQN::LICENCIA() to display fields that are down the hierarchy)
			$this->dtgLicencias->MetaAddColumn('IdLICENCIA');
			$this->dtgLicencias->MetaAddColumn(QQN::Licencia()->EMPRESAIdEMPRESAObject);
			$this->dtgLicencias->MetaAddColumn(QQN::Licencia()->PROVEEDORIdPROVEEDORObject);
			$this->dtgLicencias->MetaAddColumn('FechaInicio');
			$this->dtgLicencias->MetaAddColumn('FechaFin');
			$this->dtgLicencias->MetaAddColumn('FechaFinEstimada');
			$this->dtgLicencias->MetaAddColumn('NumeroProforma');
			$this->dtgLicencias->MetaAddColumn('NumeroCNP');
			$this->dtgLicencias->MetaAddColumn('VencimientoCNP');
			$this->dtgLicencias->MetaAddColumn('Status');
			$this->dtgLicencias->MetaAddColumn('FormaPago');
			$this->dtgLicencias->MetaAddColumn('Tipo');
			$this->dtgLicencias->MetaAddColumn('Flete');
			$this->dtgLicencias->MetaAddColumn('Seguro');
			$this->dtgLicencias->MetaAddColumn(QQN::Licencia()->PROCESOIdPROCESOObject);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Licencia');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new LicenciaEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new LicenciaEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>