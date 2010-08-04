<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Proveedor class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Proveedor objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this ProveedorListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage Drafts
	 * 
	 */
	class ProveedorListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Proveedors
		/**
		 * @var ProveedorDataGrid
		 */
		public $dtgProveedors;

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
			$this->Template = __DOCROOT__ . __PANEL_DRAFTS__ . '/ProveedorListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgProveedors = new ProveedorDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgProveedors->CssClass = 'datagrid';
			$this->dtgProveedors->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgProveedors->Paginator = new QPaginator($this->dtgProveedors);
			$this->dtgProveedors->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgProveedors->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for PROVEEDOR's properties, or you
			// can traverse down QQN::PROVEEDOR() to display fields that are down the hierarchy)
			$this->dtgProveedors->MetaAddColumn('IdPROVEEDOR');
			$this->dtgProveedors->MetaAddColumn('Nombre');
			$this->dtgProveedors->MetaAddColumn('Direccion');
			$this->dtgProveedors->MetaAddColumn('Telefono');
			$this->dtgProveedors->MetaAddColumn('Email');
			$this->dtgProveedors->MetaAddColumn(QQN::Proveedor()->PAISIdPAISObject);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Proveedor');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new ProveedorEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new ProveedorEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>