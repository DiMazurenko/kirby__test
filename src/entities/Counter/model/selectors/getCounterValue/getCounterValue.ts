import { getCounter } from '../getCounter/getCounter'
import { type CounterSchema } from 'entities/Counter'
import { createSelector } from '@reduxjs/toolkit'

export const getCounterValue = createSelector(
  getCounter, (counter: CounterSchema) => counter.value)
