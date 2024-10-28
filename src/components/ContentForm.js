import React, { useState } from 'react';
import axios from 'axios';

const ContentForm = ({ setContent }) => {
    const [contentType, setContentType] = useState('');

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            console.log('Sending request to backend...');
            const response = await axios.post('http://localhost/factory-content-generator/index.php', { contentType });
            console.log('Response received:', response.data);
            setContent(response.data);
        } catch (error) {
            console.error('Error generating content:', error);
        }
    };

    return (
        <form onSubmit={handleSubmit}>
            <label>Select Content Type:</label>
            <select value={contentType} onChange={(e) => setContentType(e.target.value)}>
                <option value="">--Select--</option>
                <option value="text">Text</option>
                <option value="image">Image</option>
                <option value="video">Video</option>
            </select>
            <button type="submit">Generate</button>
        </form>
    );
};

export default ContentForm;
