import React, { useState } from 'react';
import ContentForm from './components/ContentForm';
import ContentDisplay from './components/ContentDisplay';

function App() {
  const [content, setContent] = useState(null);

  return (
    <div className="App">
      <h1>Content Generator</h1>
      <ContentForm setContent={setContent} />
      <ContentDisplay content={content} />
    </div>
  );
}

export default App;
