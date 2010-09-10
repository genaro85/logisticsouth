<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the ListaDeDocumento class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of ListaDeDocumento objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this ListaDeDocumentoListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage Drafts
	 * 
	 */
	class ListaDeDocumentoListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list ListaDeDocumentos
		/**
		 * @var ListaDeDocumentoDataGrid
		 */
		public $dtgListaDeDocumentos;

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
			$this->Template = __DOCROOT__ . __PANEL_DRAFTS__ . '/ListaDeDocumentoListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgListaDeDocumentos = new ListaDeDocumentoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgListaDeDocumentos->CssClass = 'datagrid';
			$this->dtgListaDeDocumentos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgListaDeDocumentos->Paginator = new QPaginator($this->dtgListaDeDocumentos);
			$this->dtgListaDeDocumentos->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgListaDeDocumentos->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for LISTA_DE_DOCUMENTO's properties, or you
			// can traverse down QQN::LISTA_DE_DOCUMENTO() to display fields that are down the hierarchy)
			$this->dtgListaDeDocumentos->MetaAddColumn(QQN::ListaDeDocumento()->DOCUMENTOIdDOCUMENTOObject);
			$this->dtgListaDeDocumentos->MetaAddColumn(QQN::ListaDeDocumento()->PROCESOIdPROCESOObject);
			$this->dtgListaDeDocumentos->MetaAddColumn(QQN::ListaDeDocumento()->FASEIdFASEObject);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('ListaDeDocumento');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new ListaDeDocumentoEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new ListaDeDocumentoEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>