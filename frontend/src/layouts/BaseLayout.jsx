import Navbar from "../components/Navbar";

function BaseLayout({ children }) {
  return (
    <div className="flex flex-col min-h-screen">
      {/* Header */}
      <Navbar />

      {/* MainContent */}
      <main className="flex-1">{children}</main>

      {/* Footer */}
    </div>
  );
}

export default BaseLayout;
