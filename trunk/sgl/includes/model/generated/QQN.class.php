<?php
	class QQN {
		/**
		 * @return QQNodeAdministrador
		 */
		static public function Administrador() {
			return new QQNodeAdministrador('ADMINISTRADOR', null, null);
		}
		/**
		 * @return QQNodeCodigoPago
		 */
		static public function CodigoPago() {
			return new QQNodeCodigoPago('CODIGO_PAGO', null, null);
		}
		/**
		 * @return QQNodeDocumento
		 */
		static public function Documento() {
			return new QQNodeDocumento('DOCUMENTO', null, null);
		}
		/**
		 * @return QQNodeDocumentosFase
		 */
		static public function DocumentosFase() {
			return new QQNodeDocumentosFase('DOCUMENTOS_FASE', null, null);
		}
		/**
		 * @return QQNodeEmpleado
		 */
		static public function Empleado() {
			return new QQNodeEmpleado('EMPLEADO', null, null);
		}
		/**
		 * @return QQNodeEmpresa
		 */
		static public function Empresa() {
			return new QQNodeEmpresa('EMPRESA', null, null);
		}
		/**
		 * @return QQNodeFase
		 */
		static public function Fase() {
			return new QQNodeFase('FASE', null, null);
		}
		/**
		 * @return QQNodeFaseLicencia
		 */
		static public function FaseLicencia() {
			return new QQNodeFaseLicencia('FASE_LICENCIA', null, null);
		}
		/**
		 * @return QQNodeImportacion
		 */
		static public function Importacion() {
			return new QQNodeImportacion('IMPORTACION', null, null);
		}
		/**
		 * @return QQNodeLicencia
		 */
		static public function Licencia() {
			return new QQNodeLicencia('LICENCIA', null, null);
		}
		/**
		 * @return QQNodeListaProducto
		 */
		static public function ListaProducto() {
			return new QQNodeListaProducto('LISTA_PRODUCTO', null, null);
		}
		/**
		 * @return QQNodePais
		 */
		static public function Pais() {
			return new QQNodePais('PAIS', null, null);
		}
		/**
		 * @return QQNodeProceso
		 */
		static public function Proceso() {
			return new QQNodeProceso('PROCESO', null, null);
		}
		/**
		 * @return QQNodeProducto
		 */
		static public function Producto() {
			return new QQNodeProducto('PRODUCTO', null, null);
		}
		/**
		 * @return QQNodeProveedor
		 */
		static public function Proveedor() {
			return new QQNodeProveedor('PROVEEDOR', null, null);
		}
		/**
		 * @return QQNodeResponsable
		 */
		static public function Responsable() {
			return new QQNodeResponsable('RESPONSABLE', null, null);
		}
		/**
		 * @return QQNodeTipoDePago
		 */
		static public function TipoDePago() {
			return new QQNodeTipoDePago('TIPO_DE_PAGO', null, null);
		}
		/**
		 * @return QQNodeTransporte
		 */
		static public function Transporte() {
			return new QQNodeTransporte('TRANSPORTE', null, null);
		}
		/**
		 * @return QQNodeVigenciaDocumento
		 */
		static public function VigenciaDocumento() {
			return new QQNodeVigenciaDocumento('VIGENCIA_DOCUMENTO', null, null);
		}
	}
?>