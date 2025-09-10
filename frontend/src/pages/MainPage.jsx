import BaseLayout from "../layouts/BaseLayout";

function Test() {
  return (
    <BaseLayout>
      <div>
        <h1 className="text-center text-white my-10 text-4xl font-bold">Üdvözlünk a Billory-ban,<br/>egy szimpla, de mégis <span className="text-teal-400">hatékony</span> <br/>számlázói felületen.</h1>
      </div>
    </BaseLayout>
  );
}

export default Test;
