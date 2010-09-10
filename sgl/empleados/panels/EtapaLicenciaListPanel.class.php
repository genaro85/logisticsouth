<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the EtapaLicencia class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of EtapaLicencia objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this EtapaLicenciaListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage Drafts
	 * 
	 */
	class EtapaLicenciaListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list EtapaLicencias
		/**
		 * @var EtapaLicenciaDataGrid
		 */
		public $dtgEtapaLicencias;

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
			$this->Template = __DOCROOT__ . __PANEL_DRAFTS__ . '/EtapaLicenciaListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgEtapaLicencias = new EtapaLicenciaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgEtapaLicencias->CssClass = 'datagrid';
			$this->dtgEtapaLicencias->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgEtapaLicencias->Paginator = new QPaginator($this->dtgEtapaLicencias);
			$this->dtgEtapaLicencias->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgEtapaLicencias->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for ETAPA_LICENCIA's properties, or you
			// can traverse down QQN::ETAPA_LICENCIA() to display fields that are down the hierarchy)
			$this->dtgEtapaLicencias->MetaAddColumn(QQN::EtapaLicencia()->LICENCIAIdLICENCIAObject);
			$this->dtgEtapaLicencias->MetaAddColumn(QQN::EtapaLicencia()->ETAPAIdETAPAObject);
			$this->dtgEtapaLicencias->MetaAddColumn('ETAPAFechaInicio');
			$this->dtgEtapaLicencias->MetaAddColumn('ETAPAFechaFin');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('EtapaLicencia');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new EtapaLicenciaEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0], $strParameterArray[1]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new EtapaLicenciaEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>