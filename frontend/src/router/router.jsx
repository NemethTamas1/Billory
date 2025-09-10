import { createBrowserRouter } from "react-router-dom";
import Clients from "../pages/Clients.jsx";
import Financials from "../pages/Financials.jsx";
import Invoices from "../pages/Invoices.jsx";
import Products from "../pages/Products.jsx";
import MainPage from "../pages/MainPage.jsx";
import PageNotFound from "../pages/PageNotFound.jsx";

const router = createBrowserRouter([
    {
        path: '/clients',
        element: <Clients />
    },
    {
        path: '/financials',
        element: <Financials />
    },
    {
        path: '/invoices',
        element: <Invoices />
    },
    {
        path: '/products',
        element: <Products />
    },
    {
        path: '/',
        element: <MainPage />
    },
    {
        path: '*',
        element: <PageNotFound />
    },

]);

export default router;