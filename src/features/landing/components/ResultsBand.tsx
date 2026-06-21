import { resultStats } from "../data/landing-data";

export function ResultsBand() {
  return (
    <section className="results-band">
      {resultStats.map((stat) => (
        <div key={stat.eyebrow}>
          <span>{stat.eyebrow}</span>
          <strong>{stat.value}</strong>
          <p>{stat.label}</p>
        </div>
      ))}
    </section>
  );
}
