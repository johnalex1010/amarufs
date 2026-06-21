type IconTone = "green" | "blue" | "muted";

export function Icon({ name, tone = "green" }: { name: string; tone?: IconTone }) {
  return <i aria-hidden="true" className={`fa-solid ${name} icon icon--${tone}`} />;
}
