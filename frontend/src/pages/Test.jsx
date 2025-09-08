import { useEffect, useState } from 'react';

function Test() {
    const [tests, setData] = useState([]);

    useEffect(() => {
        fetch('http://127.0.0.1:8000/api/tests')
            .then((res) => res.json())
            .then((json) => setData(json))
            .catch((err) => console.error('Hiba történt fetch közben: ', err));
    }, []);

    return (
        <div className="Test">
            <h1>React + Laravel teszt</h1>
            <ul>
                {tests.map((t) => (
                    <li key={t.id}>
                        {t.id} - {t.value}
                    </li>
                ))}
            </ul>
        </div>
    );
}

export default Test;
