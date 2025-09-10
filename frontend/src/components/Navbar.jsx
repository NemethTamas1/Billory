import { NavLink } from "react-router-dom";

function Navbar() {
  const handleMyProfileClick = () => {
    alert("Profilom");
  };

  const handleMainPageClick = () => {
    alert("Főoldal");
  };

  const handleInvoiceClick = () => {
    alert("Számla");
  };

  const handleMonitoringClick = () => {
    alert("Kimutatások");
  };

  const handleProductsClick = () => {
    alert("Termékek");
  };

  const handleClientsClick = () => {
    alert("Vevők");
  };

  return (
    <div className="w-full bg-gray-300 border-b-2 border-black flex justify-between items-center px-3">
      {/* Logó */}
      <NavLink to="/" className="p-3 text-2xl text-black font-bold" end>
        Billory
      </NavLink>

      {/* Számla */}
      <div className="ml-auto flex gap-3">
        <NavLink
          to="/invoices"
          className="p-3 text-2xl text-black font-bold"
          end
        >
          Számla
        </NavLink>

        {/* Profilom */}
        <NavLink
          to="/myProfile"
          className="p-3 text-2xl text-red-400 font-bold"
          end
        >
          Profilom
        </NavLink>

        {/* Kimutatások */}
        <NavLink
          to="/financials"
          className="p-3 text-2xl text-black font-bold"
          end
        >
          Kimutatások
        </NavLink>

        {/* Termékek */}
        <NavLink
          to="/products"
          className="p-3 text-2xl text-black font-bold"
          end
        >
          Termékek
        </NavLink>

        {/* Vevők */}
        <NavLink
          to="/clients"
          className="p-3 text-2xl text-black font-bold"
          end
        >
          Vevők
        </NavLink>
      </div>
    </div>
  );
}

export default Navbar;
