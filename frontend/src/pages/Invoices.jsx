import BaseLayout from "../layouts/BaseLayout";

export default function Invoices() {
  return (
    <BaseLayout>
      <div>
        <h1 className="text-center text-white my-10 text-4xl font-bold">
          Számláim
        </h1>

        <div>
          <form action="submitForm">
            <div>
              {/* Vevői adatok */}
              <label className="text-white text-xl" htmlFor="name">
                Név:{" "}
              </label>
              <input
                className="bg-white p-1 rounded-lg"
                type="text"
                name="name"
              />
              <input className="m-1" type="checkbox" name="checkbox" />
              <label className="text-white text-xl" htmlFor="checkbox">
                Magányszemély
              </label>  
            </div>
          </form>
        </div>
      </div>
    </BaseLayout>
  );
}
