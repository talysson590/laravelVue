import home from './components/Home.vue';
// products
import AllProduct from './components/product/All.vue';
import CreateProduct from './components/product/Create.vue';
import EditProduct from './components/product/Edit.vue';
// documests
import AllDocument from './components/document/All.vue';
import CreateDocument from './components/document/Create.vue';
import EditDocument from './components/document/Edit.vue';
// documestsType
import AllDocumentType from './components/documentType/All.vue';
import CreateDocumentType from './components/documentType/Create.vue';
import EditDocumentType from './components/documentType/Edit.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: home
    },
    {
        name: 'product',
        path: '/product',
        component: AllProduct
    },
    {
        name: 'createProduct',
        path: '/product/create',
        component: CreateProduct
    },
    {
        name: 'editProduct',
        path: '/product/edit/:id',
        component: EditProduct
    },
    {
        name: 'document',
        path: '/document',
        component: AllDocument
    },
    {
        name: 'createDocument',
        path: '/document/create',
        component: CreateDocument
    },
    {
        name: 'editDocument',
        path: '/document/edit/:id',
        component: EditDocument
    },
    {
        name: 'documentType',
        path: '/document/type',
        component: AllDocumentType
    },
    {
        name: 'createDocumentType',
        path: '/document/type/create',
        component: CreateDocumentType
    },
    {
        name: 'editDocumentType',
        path: '/document/type/edit/:id',
        component: EditDocumentType
    }
];