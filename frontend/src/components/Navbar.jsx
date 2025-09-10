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
  }

  const handleProductsClick = () => {
    alert("Termékek");
  }

  const handleClientsClick = () => {
    alert("Vevők");
  }

  return (
    <div className="w-full bg-gray-300 border-b-2 border-black flex justify-between items-center px-3">
      {/* Logó */}
      <button
        className="p-3 text-2xl text-black font-bold"
        onClick={handleMainPageClick}
      >
        Billory
      </button>

      {/* Számla */}
      <div className="ml-auto flex gap-3">
        <button
          className="p-3 text-2xl text-black font-bold"
          onClick={handleInvoiceClick}
        >
          Számla
        </button>

        {/* Profilom */}
        <button
          className="p-3 text-2xl text-black font-bold"
          onClick={handleMyProfileClick}
        >
          Profilom
        </button>

        {/* Kimutatások */}
        <button
          className="p-3 text-2xl text-black font-bold"
          onClick={handleMonitoringClick}
        >
          Kimutatások
        </button>

        {/* Termékek */}
        <button
          className="p-3 text-2xl text-black font-bold"
          onClick={handleProductsClick}
        >
          Termékek
        </button>

        {/* Vevők */}
        <button
          className="p-3 text-2xl text-black font-bold"
          onClick={handleClientsClick}
        >
          Vevők
        </button>
      </div>
    </div>
  );
}

export default Navbar;
