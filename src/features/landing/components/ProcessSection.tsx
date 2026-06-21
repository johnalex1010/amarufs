import { processSteps } from "../data/landing-data";
import { Icon } from "@/components/ui/Icon";

export function ProcessSection() {
  return (
    <section className="section process-section">
      <h2>Así funciona nuestro proceso</h2>
      <div className="process-grid">
        {processSteps.map((step, index) => (
          <article className="process-step" key={step.label}>
            <span className="step-number">{index + 1}</span>
            <span className="step-icon">
              <Icon name={step.icon} tone={index % 2 ? "blue" : "green"} />
            </span>
            <h3>{step.label}</h3>
            <p>{step.description}</p>
          </article>
        ))}
      </div>
    </section>
  );
}
