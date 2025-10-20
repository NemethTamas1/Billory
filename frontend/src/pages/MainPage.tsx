import BaseLayout from "../layouts/BaseLayout";

function Test() {
  return (
    <BaseLayout>
      <div>
        <h1 className="text-4xl text-white text-center mt-10">Üdvözlünk a Billory-ban,<br/>egy szimpla, de mégis <span className="text-emerald-400">hatékony</span><br/> számlázó felületen.</h1>
      </div>
    </BaseLayout>
  );
}

export default Test;